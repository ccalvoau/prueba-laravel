<?php

namespace Novus\Http\Controllers;

use Novus\Client;
use Novus\Http\Requests;
use Novus\Job;
use Novus\Place;
use Novus\Team;

class AjaxController extends Controller
{
    /**
     * Get the places given a Client Id (Create Job)
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlacesByClientId($client_id)
    {
        $place = new Place();
        return $place->getSelectListByClientId($client_id);
    }

    public function getClientTypeByClientId($client_id)
    {
        $client = new Client();
        return $client->getClientTypeByClientId($client_id);
    }

    public function getLeaderByTeamId($team_id)
    {
        $team = new Team();
        return $team->getLeaderByTeamId($team_id);
    }

    public function getJobsByClientAndPlaceId($client_id, $place_id)
    {
        $job = new Job();
        return $job->getJobsByClientAndPlaceId($client_id, $place_id);
    }


}