<?php

class NewVacancyAddedObserver implements SplObserver
{

    public function update(SplSubject $subject)
    {
        echo "Появилась новая вакансия по запросу";
    }
}