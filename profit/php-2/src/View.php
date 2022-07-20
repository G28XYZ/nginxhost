<?php

class View implements Countable {
    protected array $data = [];

    // магический метод сет вызовется когда к классу обратятся по несуществующему свойству
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name];
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function display(string $template) {
        return include $template;
    }

    public function render(string $template) {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function count() {
        return count($this->data);
    }
}