<?php
    use PHPUnit\Framework\TestCase;

    use \FrameClass as Frame;

    class TestClaseFrame extends TestCase{
        public $frame;

        protected function setUp(){
            $this->setFrame(new Frame());
        }

        protected function tearDown(){
            $this->setFrame(0);  
        }

        public function setFrame($f){
            $this->frame = $f;
        }

        /*
            Cargo el array y compruebo que me retorne un true
        */
        public function testCargarFrame(){
            $result = $this->frame->cargarFrame(10);
            $this->assertTrue($result);
        }

        public function testCargaFrame2(){
            $result = $this->frame->cargarFrame(11);
            $this->assertEquals('Error, Debe ser como maximo 10 puntos', $result);
        }

        public function testTotalPuntaje(){
            $this->frame->cargarFrame(5);
            $this->frame->cargarFrame(5);
            $total = $this->frame->puntajeTotalFrame();
            $this->assertEquals(10,$total);
        }
    }
?>