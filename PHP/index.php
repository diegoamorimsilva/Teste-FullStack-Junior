<?php
  require_once __DIR__ . '/Agenda.php';

  $eventos = [
    new Evento('2021-12-31 00:00:00', 'Ano Novo'),
    new Evento('2021-12-24 00:00:00', 'Natal'),
    new Evento('2021-11-26 09:00:00', 'Dommus Day'),
    new Evento('2021-11-26 14:00:00', 'Sprint'),
    new Evento('2021-11-26 12:30:00', 'Almoço no Zé do Peixe')
  ];

  $agenda = new Agenda($eventos);

  echo "<pre>" . $agenda->imprimirJsonEventosDiaOrdenados('2021-11-26') . "</pre>";

?>
