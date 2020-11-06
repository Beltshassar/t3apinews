<?php

namespace SourceBroker\T3apinews\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use SourceBroker\T3api\Annotation as T3api;
use SourceBroker\T3api\Filter\OrderFilter;
use SourceBroker\T3api\Filter\SearchFilter;

/**
 * @T3api\ApiResource(
 *     collectionOperations={
 *          "get"={
 *              "method"="GET",
 *              "path"="/news/news",
 *              "normalizationContext"={
 *                  "groups"={"api_get_collection_t3apinews_news"}
 *              },
 *          },
 *     },
 *     attributes={
 *          "pagination_enabled"=false,
 *          "pagination_client_enabled"=false,
 *          "pagination_items_per_page"=30,
 *          "maximum_items_per_page"=1,
 *          "pagination_client_items_per_page"=false,
 *          "items_per_page_parameter_name"="itemsPerPage",
 *          "enabled_parameter_name"="pagination",
 *          "page_parameter_name"="page",
 *          "persistence"={
 *              "storagePid"="210",
 *              "recursive"=1
 *          }
 *     }
 * )
 *
 * @T3api\ApiFilter(
 *     SearchFilter::class,
 *     properties={"tnum"},
 *     arguments={
 *          "parameterName": "tnum",
 *     }
 * )
 */
class News extends \IMHLab\NewsTnum\Domain\Model\TContainer
{

    /**
     * @var string
     * @T3api\Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     * })
     */
    protected $title;

    /**
     * @var string
     * @T3api\Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     * })
     */
    protected $type;

     /**
     * @var string
     * @T3api\Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     * })
     */
    protected $tnum;

    /**
     * @T3api\Serializer\VirtualProperty()
     * @T3api\Serializer\Groups({
     *     "api_get_collection_t3apinews_news",
     * })
     * @T3api\Serializer\Type\RecordUri("tx_news")
     */
    public function getSingleUri()
    {
        // need to return non null value
        return '';
    }
}