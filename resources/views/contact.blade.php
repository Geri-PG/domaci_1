@extends('layout')
@section ('sadrzajStranice')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Kontaktirajte nas</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">Email adresa:</label>
                        <input type="email" class="form-control" id="email" placeholder="Unesite svoju email adresu"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Tema:</label>
                        <input type="text" class="form-control" id="subject" placeholder="Unesite temu poruke" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Poruka:</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Unesite svoju poruku"
                                  required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Pošalji</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Lokacija</h2>
                <p>Ovde možete naći našu lokaciju na mapi:</p>
                <div id="map" style="height: 400px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94233.58657760492!2d19.25587885!3d42.43200075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134de8079606867d%3A0x6bf78a76ea588ae9!2sPodgorica!5e0!3m2!1sen!2s!4v1710878714385!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    Contact
@endsection
