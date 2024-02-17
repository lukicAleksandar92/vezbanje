<div class="row justify-content-center">
    <div class="col-md-5 col-12 p-4">
        <h4>Dodaj ocenu</h4>

        <form class="row" method="POST" action="/sacuvaj-ocenu">
            @if ($errors->any())
                <p>Greska: {{ $errors->first() }}</p>
            @endif

            {{ csrf_field() }}

            <div style="padding: 0;" class="row mt-2 col-12">
                <div class="col col-md-12 col-12 mt-2 mt-md-0">
                    <input value="" name="predmet" required type="text" class="form-control"
                        placeholder="Unesite ime predmeta ">
                </div>
            </div>
            <div style="padding: 0;" class="row mt-2 col-12">
                <div class="col col-md-12 col-12 mt-2 mt-md-0">
                    <input value="" name="ocena" required type="text" class="form-control"
                        placeholder="Unesite ocenu">
                </div>
            </div>
            <div style="padding: 0;" class="row mt-2 col-12">
                <div class="col col-md-12 col-12 mt-2 mt-md-0">
                    <input value="" name="profesor" required type="text" class="form-control" placeholder="Unesite ime profesora ">
                </div>
            </div>

            <button class="btn btn-outline-danger">Sacuvaj ocenu</button>

        </form>

    </div>
</div>
