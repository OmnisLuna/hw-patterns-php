<?php
class Candidate
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $workExperience;

    public function subscribeToNewVacancies(VacanciesStorage $vacancies)
    {
        $observer = new NewVacancyAddedObserver();
        $vacancies->attach($observer);
    }

    public function unsubcsribeFromNewVacancies(VacanciesStorage $vacancies, NewVacancyAddedObserver $observer)
    {
        $vacancies->detach($observer);
    }
}
