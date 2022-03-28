<?php

namespace App\Repositories;

use App\Models\Mahsiswassaya;
use App\Repositories\BaseRepository;

/**
 * Class MahsiswassayaRepository
 * @package App\Repositories
 * @version March 28, 2022, 12:43 am UTC
*/

class MahsiswassayaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'nim',
        'kontak'
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
        return Mahsiswassaya::class;
    }
}
