<?php

namespace App\Repositories;

use App\Models\Nilai;
use App\Repositories\BaseRepository;

/**
 * Class NilaiRepository
 * @package App\Repositories
 * @version March 28, 2022, 3:13 am UTC
*/

class NilaiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nilai'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nilai::class;
    }
}
