<?php
  require_once __DIR__ . '/AgendaInterface.php';
  require_once __DIR__ . '/Evento.php';

  /*
    Classe que abstrai uma agenda; consiste de uma composição simples de eventos.
    Implemente o método privado para filtrar os eventos por dia e o método da AgendaInterface
    para gerar o json ordenado.
  */

  class Agenda implements AgendaInterface{

    private $eventos = [];
    public function __construct($eventos){
      $this->eventos = $eventos;
    }

  
    /**
     *Filtra os eventos por dia e retorna um array de eventos.
     *@param  string $dataHoraDia Informações do dia.
     *@return array $eventosJson Array de eventos.
     */
    public function imprimirJsonEventosDiaOrdenados($dataHoraDia){
      $eventosDia = $this->filtrarEventosDia($dataHoraDia);
      usort($eventosDia, function($a, $b){
        return $a->getDataHora() <=> $b->getDataHora();
      });
      $eventosJson = [];
      foreach($eventosDia as $evento){
        $eventosJson[] = $evento->getEstadoEmArrayAssociativo();
      }
      return json_encode($eventosJson);
    }

    /* Método que filtra os eventos por dia.*/
    private function filtrarEventosDia($dataHoraDia){
      $eventosDia = [];
      foreach($this->eventos as $evento){
        if($evento->getDataHora()->format('Y-m-d') == $dataHoraDia){
          $eventosDia[] = $evento;
        }
      }
      return $eventosDia;
    }

  }
?>
