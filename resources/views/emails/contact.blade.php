<div>
    {{ $contact->name }},

    <div>
        <p>
            Adresse e-mail,
        </p>
        <p>
            {{ $contact->email }}
        </p>
    </div>

    <div>
        <p>
            Sujet,
        </p>
        <p>
            {{ $contact->subject }}
        </p>
    </div>

    <div>
        <p>
            Message,
        </p>
        <p>
            {{ $contact->message }}
        </p>
    </div>

</div>
