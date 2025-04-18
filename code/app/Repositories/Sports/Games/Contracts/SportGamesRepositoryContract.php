<?php

namespace App\Repositories\Sports\Games\Contracts;


interface SportGamesRepositoryContract
{
    public function getGames(int $perPage = 10);

    public function insertGames(array $homeTeam, array $visitorTeam, array $game): void;
}
