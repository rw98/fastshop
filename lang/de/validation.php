<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validierung Sprachzeilen
    |--------------------------------------------------------------------------
    |
    | Die folgenden Sprachzeilen enthalten die Standardfehlermeldungen, die von
    | der Validierungsklasse verwendet werden. Einige dieser Regeln haben
    | mehrere Versionen, wie z.B. die Größenregeln. Sie können jede dieser
    | Nachrichten nach Bedarf ändern.
    |
    */

    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'accepted_if' => 'Das :attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => 'Das :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das :attribute muss ein Array sein.',
    'ascii' => 'Das :attribute darf nur alphanumerische Zeichen und Symbole enthalten.',
    'before' => 'Das :attribute muss ein Datum vor :date sein.',
    'before_or_equal' => 'Das :attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'array' => 'Das :attribute muss zwischen :min und :max Elemente enthalten.',
        'file' => 'Das :attribute muss zwischen :min und :max Kilobyte groß sein.',
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'string' => 'Das :attribute muss zwischen :min und :max Zeichen lang sein.',
    ],
    'boolean' => 'Das :attribute muss wahr oder falsch sein.',
    'can' => 'Das :attribute enthält einen nicht erlaubten Wert.',
    'confirmed' => 'Die Bestätigung von :attribute stimmt nicht überein.',
    'contains' => 'Das :attribute enthält keinen erforderlichen Wert.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_equals' => 'Das :attribute muss ein Datum gleich :date sein.',
    'date_format' => 'Das :attribute entspricht nicht dem Format :format.',
    'decimal' => 'Das :attribute muss :decimal Dezimalstellen haben.',
    'declined' => 'Das :attribute muss abgelehnt werden.',
    'declined_if' => 'Das :attribute muss abgelehnt werden, wenn :other :value ist.',
    'different' => 'Das :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das :attribute muss :digits Ziffern haben.',
    'digits_between' => 'Das :attribute muss zwischen :min und :max Ziffern haben.',
    'dimensions' => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das :attribute hat einen doppelten Wert.',
    'doesnt_end_with' => 'Das :attribute darf nicht mit einem der folgenden Werte enden: :values.',
    'doesnt_start_with' => 'Das :attribute darf nicht mit einem der folgenden Werte beginnen: :values.',
    'email' => 'Das :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Das :attribute muss mit einem der folgenden Werte enden: :values.',
    'enum' => 'Das ausgewählte :attribute ist ungültig.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => 'Das :attribute muss eine Datei sein.',
    'filled' => 'Das :attribute muss einen Wert haben.',
    'gt' => [
        'array' => 'Das :attribute muss mehr als :value Elemente enthalten.',
        'file' => 'Das :attribute muss größer als :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'string' => 'Das :attribute muss größer als :value Zeichen sein.',
    ],
    'gte' => [
        'array' => 'Das :attribute muss mindestens :value Elemente enthalten.',
        'file' => 'Das :attribute muss größer oder gleich :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss größer oder gleich :value sein.',
        'string' => 'Das :attribute muss größer oder gleich :value Zeichen sein.',
    ],
    'image' => 'Das :attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das :attribute muss in :other existieren.',
    'integer' => 'Das :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das :attribute muss eine gültige IP-Adresse sein.',
    'json' => 'Das :attribute muss ein gültiger JSON-String sein.',
    'lowercase' => 'Das :attribute muss kleingeschrieben sein.',
    'lt' => [
        'array' => 'Das :attribute muss weniger als :value Elemente enthalten.',
        'file' => 'Das :attribute muss kleiner als :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'string' => 'Das :attribute muss weniger als :value Zeichen haben.',
    ],
    'lte' => [
        'array' => 'Das :attribute darf nicht mehr als :value Elemente enthalten.',
        'file' => 'Das :attribute muss kleiner oder gleich :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'string' => 'Das :attribute darf nicht mehr als :value Zeichen haben.',
    ],
    'max' => [
        'array' => 'Das :attribute darf nicht mehr als :max Elemente enthalten.',
        'file' => 'Das :attribute darf nicht größer als :max Kilobyte sein.',
        'numeric' => 'Das :attribute darf nicht größer als :max sein.',
        'string' => 'Das :attribute darf nicht mehr als :max Zeichen haben.',
    ],
    'mimes' => 'Das :attribute muss eine Datei vom Typ: :values sein.',
    'min' => [
        'array' => 'Das :attribute muss mindestens :min Elemente haben.',
        'file' => 'Das :attribute muss mindestens :min Kilobyte groß sein.',
        'numeric' => 'Das :attribute muss mindestens :min sein.',
        'string' => 'Das :attribute muss mindestens :min Zeichen lang sein.',
    ],
    'not_in' => 'Das ausgewählte :attribute ist ungültig.',
    'numeric' => 'Das :attribute muss eine Zahl sein.',
    'required' => 'Das :attribute ist erforderlich.',
    'string' => 'Das :attribute muss ein String sein.',
    'unique' => 'Das :attribute ist bereits vergeben.',

    /*
    |--------------------------------------------------------------------------
    | Benutzerdefinierte Validierung
    |--------------------------------------------------------------------------
    |
    | Hier können Sie benutzerdefinierte Validierungsnachrichten für Attribute
    | angeben, indem Sie die Konvention "attribute.rule" verwenden.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'benutzerdefinierte-nachricht',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Benutzerdefinierte Validierungsattribute
    |--------------------------------------------------------------------------
    |
    | Diese Sprachzeilen werden verwendet, um Platzhalter-Attribute durch etwas
    | Leserfreundlicheres auszutauschen, wie z.B. "E-Mail-Adresse" anstelle
    | von "email".
    |
    */

    'attributes' => [],

];
