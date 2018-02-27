<?php 
include 'templates/header.php';
include 'base.php';
?>
<script src="js/script.js"></script>


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj rezerwację</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeButton">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group-row">
          <label for="roomSelect" class="col-sm-2 col-form-label">Wybież pokój</label>
          <div class="col-sm-10 bottom-space">
            <select class="form-control" id="roomSelect">
              <option value="">numer pokoju</option>
            </select>

          </div>
        </div>
        <div class="card bottom-space">
          <div class="card-header">
            Termin rezerwacji
          </div>
          <div class="form-inline">
            <div class="col-sm-6 bottom-space">
              <label for="startDate">Początek rezerwacji</label>

              <input id="startDate" width="276" />

            </div>
            <div class="col-sm-6 bottom-space">
              <label for="endDate">Koniec rezerwacji</label>
              <input id="endDate" width="276" />
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            Klient
          </div>
          <div class="form-inline">
            <div class="col-sm-10 bottom-space">
              <label for="nameInput">Nazwa</label>
              <input type="text" class="form-control" id="nameInput" placeholder="Nazwa" required>
              <label for="nameInput">Email</label>
              <input type="text" class="form-control" id="emailInput" placeholder="Email" required>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="button" class="btn btn-primary">Zapisz</button>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-lg-1 top-margin">
    <ul class="list-group list-group-flush" id="roomList">
    </ul>
  </div>
  <div class="col-lg-8 top-margin">
    <div id="calendar">

    </div>
  </div>
</div>