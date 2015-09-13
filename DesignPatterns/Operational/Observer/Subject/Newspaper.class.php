<?php


namespace DesignPatterns\Operational\Observer\Subject;


class Newspaper implements \SplSubject{

    /**
     * @var string
     */
    private $name;

    /**
     * @var \SplObserver[]
     */
    private $observers = array();

    /**
     * @var string
     */
    private $content;

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    /**
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer) {
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    /**
     * @param string $content
     */
    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getContent() {
        return $this->content." ({$this->name})";
    }

    /**
     *
     */
    public function notify() {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
