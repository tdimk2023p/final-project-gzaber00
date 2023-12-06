// alert(Cookies.get('skor'));

if(Cookies.get('skor') == 'undefined' || Cookies.get('skor') == 'NaN'){
    Cookies.set('skor',0);
    $('#skor').text(Cookies.get('skor'));
}else{
    $('#skor').text(Cookies.get('skor'));
}

let skor = Cookies.get('skor');

console.log(Cookies.get('skor'));
// alert(skor);

for(var i=1;i<11;i++){
    $('#bs'+i).hide(100);
    $('#s'+i).show(100);
}



/* The dragging code for '.draggable' from the demo above
         * applies to this demo as well so it doesn't have to be repeated. */
        
        // enable draggables to be dropped into this
        interact('.dropzone').dropzone({
            // only accept elements matching this CSS selector
            accept: '.yes-drop',
            // Require a 75% element overlap for a drop to be possible
            overlap: 0.75,

            // listen for drop related events:

            ondropactivate: function(event) {
                // add active dropzone feedback
                event.target.classList.add('drop-active')
            },
            ondragenter: function(event) {
                var draggableElement = event.relatedTarget
                var dropzoneElement = event.target

                // feedback the possibility of a drop
                dropzoneElement.classList.add('drop-target')
                draggableElement.classList.add('can-drop')
                // draggableElement.textContent = 'Dragged in'
            },
            ondragleave: function(event) {
                // remove the drop feedback style
                event.target.classList.remove('drop-target')
                event.relatedTarget.classList.remove('can-drop')
                // event.relatedTarget.textContent = 'Dragged out'
            },
            ondrop: function(event) {
                let id_soal = event.relatedTarget.id;
                // event.relatedTarget.textContent = 'Dropped';
                
                for(var i=1;i<11;i++){
                    if(id_soal == "jb"+i ){
                        $("#s"+i).hide(100);
                        $("#bs"+i).show(100);
                        Cookies.set("s"+i,1);
                    }
                }

                skor++;
                Cookies.set("skor",skor);
                $('#skor').text($.cookie('skor'));
                doBounce($('#skor_container'), 2, '10px', 300);   
            },
            ondropdeactivate: function(event) {
                // remove active dropzone feedback
                event.target.classList.remove('drop-active')
                event.target.classList.remove('drop-target')
            }
        })

        function dragMoveListener(event) {
            var target = event.target
            // keep the dragged position in the data-x/data-y attributes
            var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
            var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

            // translate the element
            target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'

            // update the posiion attributes
            target.setAttribute('data-x', x)
            target.setAttribute('data-y', y)
        }
        function doBounce(element, times, distance, speed) {
            for(var i = 0; i < times; i++) {
                element.animate({marginTop: '-='+distance}, speed)
                    .animate({marginTop: '+='+distance}, speed);
            }        
        }
        interact('.drag-drop')
            .draggable({
                inertia: true,
                modifiers: [
                    interact.modifiers.restrictRect({
                        restriction: 'parent',
                        endOnly: true
                    })
                ],
                autoScroll: true,
                // dragMoveListener from the dragging demo above
                listeners: {
                    move: dragMoveListener
                }
            })

            