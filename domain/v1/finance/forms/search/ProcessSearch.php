<?php

namespace domain\v1\finance\forms\search;

use yii2lab\domain\base\Model;
use yii2lab\domain\data\Query;
use yii2lab\extension\activeRecord\helpers\SearchHelper;
use yii2lab\extension\yii\helpers\ArrayHelper;

class ProcessSearch extends Model {

	public $title;
	public $name;
	public $merchant;

	public function rules() {
		return [
			[['title', 'name', 'merchant'], 'safe'],
		];
	}

	public function titleAttribute() {
		return 'title';
	}

	public function prepareQuery(Query $query) {
		$titleAttribute = ArrayHelper::toArray($this->titleAttribute());
		foreach($this->getAttributes() as $name => $value) {
			if($value !== '') {
				if(!in_array($name, $titleAttribute)) {
					$query->andWhere([$name => $value]);
				}
			}
		}
		if($this->{$titleAttribute[0]}) {
			$query->andWhere([SearchHelper::SEARCH_PARAM_NAME => $this->{$titleAttribute[0]}]);
		}
	}
	

	

	

}
