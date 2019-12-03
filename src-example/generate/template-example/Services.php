<?php
namespace App\Services\{replace};

use App\Services\DataProvider\BaseDataProviderWithView;

class {replace} extends BaseDataProviderWithView
{
    /**
     * @var string
     * set namespace
     */
    protected $namespace = '{replace}';

    /**
     * @var string
     * set endpoint
     */
    protected $endpoint = 'v1/{replace_sm}';

    /**
     * @var string
     */
    protected $env = 'end_point';

    /**
     * @var array
     */
    protected $includes = [
    ];

    protected $searchBetween = [
        'created_at' => [
            'created_start_at',
            'created_end_at'
        ],
    ];

    protected $limit = 5000;

    protected  $columnLists = [
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function lists($params = array(), $headers = array())
    {
        self::warpOrderParams($params);
        self::warpSearchParams($params);
        return parent::lists($this->queryParams, $headers);
    }
    /**
     * @param array $data
     * @param array $headers
     * @return \Illuminate\Http\RedirectResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($params = array()) {
        if(isset($params)) {
            foreach($params as $key => $val){
                $this->queryParams[$key] = $val;
            }
        }
        return parent::lists($this->queryParams);
    }

    public function create($data = array(), $headers = array())
    {
        return parent::create($data, $headers);
    }

    public function update($brandId, $data = array(), $headers = array())
    {
        return parent::update($brandId, $data, $headers);
    }

    public function findById($id, $headers = array())
    {
        return parent::findById($id, $headers);
    }
}
