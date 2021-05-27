<?php

namespace cooldaniel\helpers\yii2;

class SearchHelper
{
    public static function get_list_response($dataProvider, $searchModel, $keys=[])
    {
        if (!$keys) {
            $keys = $searchModel->attributeLabels();
        }

        \D::logc();
        \D::yiisql($dataProvider->query);

        return [
            'pages'=>get_page_info($dataProvider->pagination),
            'keys'=>$keys,
            'data'=>model_to_array($dataProvider->getModels()),
        ];
    }

    public static function model_to_array($models)
    {
        $res = [];
        foreach ($models as $model) {
            $res[] = $model->attributes;
        }
        return $res;
    }

    public static function get_page_info($page)
    {
        return [
            'total_count'=>$page->totalCount,
            'page_count'=>$page->pageCount,
            'page_size'=>$page->pageSize,
            'default_page_size'=>$page->defaultPageSize,
            'page_size_limit'=>$page->pageSizeLimit,
            'page'=>$page->page,
            'offset'=>$page->offset,
            'limit'=>$page->limit,
            'page_param'=>$page->pageParam,
            'page_size_param'=>$page->pageSizeParam,
            'validate_page'=>$page->validatePage,
            'force_page_param'=>$page->forcePageParam,
            'page_route'=>$page->route,
            'page_params'=>$page->params,
            'links'=>$page->links,
        ];
    }
}

