<!-- Modal -->
<div class="modal modal-lg fade" id="carModal" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light border border-secondary">
            <div class="modal-header border-bottom-1 border-secondary">
                <h5 class="modal-title me-auto">
                    <span id="carModalLabel"></span>
                </h5>
                <button class="btn bg-warning text-dark" onclick="close_modal()">close</button>
            </div>
            <div class="modal-body">
                <h6><span id="carModalSubtitle" class="text-secondary"></span></h6>
                <ul class="list-group mt-3">
                    <li class="list-group-item bg-dark border-secondary text-light">Transmission: <span id="carModalTransmission"></span></li>
                    <li class="list-group-item bg-dark border-secondary text-light">Fuel: <span id="carModalFuel"></span></li>
                    <li class="list-group-item bg-dark border-secondary text-light">Category: <span id="carModalCategory"></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function open_modal_with_data(model, make, year, transmission, fuel, category) {
        $("#carModalLabel").text(model)
        $('#carModalSubtitle').text(make + ' ' + year)
        $("#carModalTransmission").text(transmission)
        $("#carModalFuel").text(fuel)
        $("#carModalCategory").text(category)
        $('#carModal').modal('show')
    }

    function close_modal() {
        $('#carModal').modal('hide')
    }
</script>