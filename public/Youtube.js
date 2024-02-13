
 var tag = document.createElement('script');
 tag.src = 'https://www.youtube.com/iframe_api';
 var firstScriptTag = document.getElementsByTagName('script')[0];
 firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

 var player;

 function onYouTubeIframeAPIReady() {
     player = new YT.Player('player', {
         height: '240',
         width: '426',
         videoId: '5n4qePlCR_0', // ID del video di YouTube
         playerVars: {
             'autoplay': 0, // Autoplay disabilitato
             'controls': 1, // Mostra i controlli del video
             'modestbranding': 1 // Rimuovi il logo di YouTube dal player
         },
         events: {
             'onReady': onPlayerReady
         }
     });
 }

 function onPlayerReady(event) {
     // Esegui azioni aggiuntive quando il player è pronto
 }