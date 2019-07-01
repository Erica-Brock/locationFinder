<div class="container">
    <div class="row align-items-center">
        <div class="col">
        <p class="text-center">
            Enter your zip code to locate
            <br>
            your closest participating Cadillac Dealer:
        </p>
        </div>
    </div>
    <form method="post" action="location_functions.php" class="" id="location-form">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="form-group">
                    <input id="user-location" class="form-control" name="current_location" type="text" placeholder="Zip Code">
                    <input id="user-destination" class="form-control" name="destination" type="hidden">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 justify-content-between">
                <div>
                    <button type="button" class="btn btn-light btn-lg" id="geo-btn">
                        Find Near Me
                    </button>
                    <button type="button" class="btn btn-light btn-lg" id="zip-btn">
                        Search By Zip
                    </button>
                </div>
            </div>
        </div>
    </form>
    </div>

</div>