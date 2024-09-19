<?php



class DateCalculator {
    private $date1;
    private $date2;

    // Constructor to initialize dates
    public function __construct($date1, $date2) {
        $this->date1 = new DateTime($date1);
        $this->date2 = new DateTime($date2);
    }

    // Method to calculate the number of days between the dates
    public function calculateDays() {
        $interval = $this->date1->diff($this->date2);
        return $interval->days;
    }
}
?>
