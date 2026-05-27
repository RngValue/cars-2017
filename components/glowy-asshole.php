<div id="glowyAsshole"></div>

<script>
    const move = document.getElementById('glowyAsshole');
    
    document.body.onpointermove = event => {
        const { clientX, clientY } = event;
        move.animate({
            marginLeft: `${clientX}px`,
            marginTop: `${clientY}px`,
        }, { duration: 500, fill: 'forwards' })
    }
    document.addEventListener('keydown', function (event) {
        if (event.key == 'Shift') {
            move.animate({
                height: `100px`,
                width: `100px`,
            }, { duration: 100, fill: 'forwards' })
        }
    })
    document.addEventListener('keyup', function (event) {
        if (event.key == 'Shift') {
            move.animate({
                height: `10px`,
                width: `10px`,
            }, { duration: 100, fill: 'forwards' })
        }
    })
</script>