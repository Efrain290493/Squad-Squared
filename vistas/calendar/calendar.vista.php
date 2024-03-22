<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de solicitudes de clientes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
  <style>
    /* Estilos personalizados para el calendario */
    #calendar {
      margin-right: auto; /* Alinear a la derecha */
      margin-left: 10%; /* Margen derecho del 10% */
    }
    .fc-event {
      background-color: #5cb85c; /* Color de fondo para eventos */
      color: white; /* Color de texto para eventos */
      border-color: #4cae4c; /* Color del borde para eventos */
      border-radius: 5px; /* Bordes redondeados para eventos */
    }
  </style>
</head>
<body>
  <div id="calendar"></div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
          {
            title: 'Solicitud de cliente 1',
            start: '2024-02-06T10:00:00',
            end: '2024-02-06T11:00:00',
            description: 'Esta es una solicitud de cliente importante.',
            icon: '🛒' // Ícono representativo del evento
          },
          {
            title: 'Solicitud de cliente 2',
            start: '2024-02-07T14:00:00',
            end: '2024-02-07T15:00:00',
            description: 'Reunión para discutir nuevas ideas.',
            icon: '💡' // Ícono representativo del evento
          }
        ],
        eventClick: function(info) {
          // Al hacer clic en un evento, mostrar información adicional
          alert(info.event.extendedProps.description);
        }
      });

      calendar.render();
    });
  </script>
</body>
</html>
