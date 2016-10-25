<?php

namespace App\Repositories;

use App\Models\Location;
use App\Repositories\BaseRepository;

class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'location_type',
        'state'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Location::class;
    }
}
