<?php


namespace DesignPatterns\Operational\Observer\Observer;


class Reader implements \SplObserver{
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject) {
        echo $this->name.' is reading breakout news <b>'.$subject->getContent().'</b><br>';
    }
}
