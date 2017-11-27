<?php
    use PHPUnit\Framework\TestCase;

    use \JuegoClass as Juego;

    class TestClaseFrame extends TestCase{
        public $juego;

        protected function setUp(){
            $this->setJuego(new Juego());
        }

        protected function tearDown(){
            $this->setJuego(0); 
        }

        public function setJuego($f){
            $this->juego = $f;
        }

        /*
        Crea un juego
        */
        public function testCrearJuego(){
            
            $result = $this->juego->crearJuego(2,3);
            
            $this->assertEquals(true, $result);
        }

        public function testCrear11Juego(){
            $this->juego->crearJuego(2,3);
            $this->juego->crearJuego(4,2);
            $this->juego->crearJuego(3,4);
            $this->juego->crearJuego(2,1);
            $this->juego->crearJuego(3,5);
            $this->juego->crearJuego(5,4);
            $this->juego->crearJuego(5,4);
            $this->juego->crearJuego(6,3);
            $this->juego->crearJuego(4,3);
            $this->juego->crearJuego(4,5);
            $result = $this->juego->crearJuego(1,1);

            $this->assertEquals('ERROR, Mas de 10 juegos', $result);
        }

        public function testContabilizarPuntajeJuego(){
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $result = $this->juego->contabilizarPuntajeJuego();
            $this->assertEquals(10,$result);
        }

        public function testContabilizaUnPleno(){
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $result = $this->juego->contabilizaPrimerPleno();            
            $this->assertEquals(12,$result);
        }

        public function testContabilizaUnPleno2(){
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(1,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(1,0);
            $result = $this->juego->contabilizaVariosJuego();
            $this->assertEquals(12,$result[0]);
            $this->assertEquals(21,$result[1]);
        }

        public function testContabilizarPlenosJuego(){
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $result = $this->juego->contabilizarPlenosJuego();
            $this->assertEquals(300,$result);
        }

        public function testEjemploJuego(){
            $this->juego->crearJuego(2,3);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(4,5);
            $this->juego->crearJuego(3,5);
            $this->juego->crearJuego(5,4);
            $this->juego->crearJuego(5,4);
            $this->juego->crearJuego(6,3);
            $this->juego->crearJuego(4,3);
            $this->juego->crearJuego(10,0);
            $this->juego->crearJuego(4,10);
            $result = $this->juego->contabilizarPlenosJuego();
            $this->assertEquals(128,$result);
        }
    }
?>