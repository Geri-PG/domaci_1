@extends('layout')
@section ('sadrzajStranice')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Kontaktirajte nas</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">Email adresa:</label>
                        <input type="email" class="form-control" id="email" placeholder="Unesite svoju email adresu" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Tema:</label>
                        <input type="text" class="form-control" id="subject" placeholder="Unesite temu poruke" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Poruka:</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Unesite svoju poruku" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Pošalji</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Lokacija</h2>
                <p>Ovde možete naći našu lokaciju na mapi:</p>
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Contact
@endsection
