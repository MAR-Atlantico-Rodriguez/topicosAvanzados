<?php
    use PHPUnit\Framework\TestCase;

    use \FrameClass as Frame;

    class TestClaseFrame extends TestCase{
        public $frame;

        protected function setUp(){
            $this->setFrame(new Frame());
        }

        protected function tearDown(){
           
        }

        public function setFrame($f){
            $this->frame = $f;
        }

        public function testCargarFrame(){
            $result = $this->frame->cargarFrame(0,0,10);
            $this->assertEquals(true, $result);

            $result = $this->frame->cargarFrame(0,0,10);
            $this->assertEquals('Error, posiciones ocupadas', $result);
        }
    }
?>