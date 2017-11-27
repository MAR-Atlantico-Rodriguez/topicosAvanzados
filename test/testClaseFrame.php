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
            Cargo el array en la posicion anterior y compruebo que me retorne un mensaje de error
        */
        public function testCargarFrame(){
            $result = $this->frame->cargarFrame(0,0,10);
            $this->assertTrue($result);           

            $result = $this->frame->cargarFrame(0,0,10);
            $this->assertEquals('ERROR', $result);
        }

        public function testCargaFrame2(){
            $result = $this->frame->cargarFrame(0,0,11);
            $this->assertEquals('Error, Debe ser como maximo 10 puntos', $result);
        }

        public function testTotalPuntaje(){
            $this->frame->cargarFrame(0,0,5);
            $this->frame->cargarFrame(0,1,5);
            $total = $this->frame->puntajeTotalFrame();
            $this->assertEquals(5,$total);
        }
    }
?>