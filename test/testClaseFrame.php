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

        /*
            Comprueba la cantidad de tiros que posee un Frame
        */
        
        public function testCantidadTiros(){
            $a = $this->frame->cargarFrame(0,0,5);
            $b = $this->frame->cargarFrame(0,1,5);
            $result = $this->frame->cantidadTiros(0);
            $this->assertEquals(2, $result);  
        }   
    }
?>