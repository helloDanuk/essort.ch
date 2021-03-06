<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => ':attribute muss akzeptiert werden.',
    'accepted_if'     => ':attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url'      => ':attribute ist keine gültige Internet-Adresse.',
    'after'           => ':attribute muss ein Datum nach dem :date sein.',
    'after_or_equal'  => ':attribute muss ein Datum nach dem :date oder gleich dem :date sein.',
    'alpha'           => ':attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash'      => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num'       => ':attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array'           => ':attribute muss ein Array sein.',
    'before'          => ':attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => ':attribute muss ein Datum vor dem :date oder gleich dem :date sein.',
    'between'         => [
        'numeric' => ':attribute muss zwischen :min und :max liegen.',
        'file'    => ':attribute muss zwischen :min und :max Kilobytes gross sein.',
        'string'  => ':attribute muss zwischen :min und :max Zeichen lang sein.',
        'array'   => ':attribute muss zwischen :min und :max Elemente haben.',
    ],
    'boolean'          => ":attribute muss entweder 'true' oder 'false' sein.",
    'confirmed'        => ':attribute stimmt nicht mit der Bestätigung überein.',
    'current_password' => 'Das Passwort ist falsch.',
    'date'             => ':attribute muss ein gültiges Datum sein.',
    'date_equals'      => ':attribute muss ein Datum gleich dem :date sein.',
    'date_format'      => ':attribute entspricht nicht dem gültigen Format für :format.',
    'declined'         => ':attribute muss abgelehnt werden.',
    'declined_if'      => ':attribute muss abgelehnt werden wenn :other :value ist.',
    'different'        => ':attribute und :other müssen sich unterscheiden.',
    'digits'           => ':attribute muss :digits Stellen haben.',
    'digits_between'   => ':attribute muss zwischen :min und :max Stellen haben.',
    'dimensions'       => ':attribute hat ungültige Bildabmessungen.',
    'distinct'         => ':attribute beinhaltet einen bereits vorhandenen Wert.',
    'email'            => ':attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with'        => ':attribute muss eine der folgenden Endungen aufweisen: :values',
    'enum'             => 'Der ausgewählte Wert ist ungültig.',
    'exists'           => 'Der gewählte Wert für :attribute ist ungültig.',
    'file'             => ':attribute muss eine Datei sein.',
    'filled'           => ':attribute muss ausgefüllt sein.',
    'gt'               => [
        'numeric' => ':attribute muss mindestens :value sein.',
        'file'    => ':attribute muss mindestens :value Kilobytes gross sein.',
        'string'  => ':attribute muss mindestens :value Zeichen lang sein.',
        'array'   => ':attribute muss mindestens :value Elemente haben.',
    ],
    'gte' => [
        'array'   => ':attribute muss grösser oder gleich :value Elemente haben.',
        'file'    => ':attribute muss grösser oder gleich :value Kilobytes sein.',
        'numeric' => ':attribute muss grösser oder gleich :value sein.',
        'string'  => ':attribute muss grösser oder gleich :value Zeichen lang sein.',
    ],
    'image'    => ':attribute muss ein Bild sein.',
    'in'       => 'Der gewählte Wert für :attribute ist ungültig.',
    'in_array' => 'Der gewählte Wert für :attribute kommt nicht in :other vor.',
    'integer'  => ':attribute muss eine ganze Zahl sein.',
    'ip'       => ':attribute muss eine gültige IP-Adresse sein.',
    'ipv4'     => ':attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6'     => ':attribute muss eine gültige IPv6-Adresse sein.',
    'json'     => ':attribute muss ein gültiger JSON-String sein.',
    'lt'       => [
        'array'   => ':attribute muss weniger als :value Elemente haben.',
        'file'    => ':attribute muss kleiner als :value Kilobytes sein.',
        'numeric' => ':attribute muss kleiner als :value sein.',
        'string'  => ':attribute muss kürzer als :value Zeichen sein.',

    ],
    'lte' => [
        'array'   => ':attribute darf maximal :value Elemente haben.',
        'file'    => ':attribute muss kleiner oder gleich :value Kilobytes sein.',
        'numeric' => ':attribute muss kleiner oder gleich :value sein.',
        'string'  => ':attribute darf maximal :value Zeichen lang sein.',
    ],
    'mac_address' => ':attribute muss eine gültige MAC-Adresse sein.',
    'max'         => [
        'array'   => ':attribute darf maximal :max Elemente haben.',
        'file'    => ':attribute darf maximal :max Kilobytes gross sein.',
        'numeric' => ':attribute darf maximal :max sein.',
        'string'  => ':attribute darf maximal :max Zeichen haben.',
    ],
    'mimes'     => ':attribute muss den Dateityp :values haben.',
    'mimetypes' => ':attribute muss den Dateityp :values haben.',
    'min'       => [
        'numeric' => ':attribute muss mindestens :min sein.',
        'file'    => ':attribute muss mindestens :min Kilobytes gross sein.',
        'string'  => ':attribute muss mindestens :min Zeichen lang sein.',
        'array'   => ':attribute muss mindestens :min Elemente haben.',
    ],
    'multiple_of'          => ':attribute muss ein Vielfaches von :value sein.',
    'not_in'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'not_regex'            => ':attribute hat ein ungültiges Format.',
    'numeric'              => ':attribute muss eine Zahl sein.',
    'password'             => 'Das Passwort ist falsch.',
    'present'              => ':attribute muss vorhanden sein.',
    'prohibited'           => ':attribute ist unzulässig.',
    'prohibited_if'        => ':attribute ist unzulässig, wenn :other :value ist.',
    'prohibited_unless'    => ':attribute ist unzulässig, wenn :other nicht :values ist.',
    'prohibits'            => ':attribute verbietet die Angabe von :other.',
    'regex'                => ':attribute Format ist ungültig.',
    'required'             => ':attribute muss ausgefüllt sein.',
    'required_array_keys'  => 'Dieses Feld muss Einträge enthalten für: :values.',
    'required_if'          => ':attribute muss ausgefüllt sein, wenn :other :value ist.',
    'required_unless'      => ':attribute muss ausgefüllt sein, wenn :other nicht :values ist.',
    'required_with'        => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => ':attribute muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => ':attribute muss angegeben werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => ':attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => ':attribute muss gleich :size sein.',
        'file'    => ':attribute muss :size Kilobyte gross sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
        'array'   => ':attribute muss genau :size Elemente haben.',
    ],
    'starts_with' => ':attribute muss einen der folgenden Anfänge aufweisen: :values',
    'string'      => ':attribute muss ein String sein.',
    'timezone'    => ':attribute muss eine gültige Zeitzone sein.',
    'unique'      => ':attribute ist schon vergeben.',
    'uploaded'    => ':attribute konnte nicht hochgeladen werden.',
    'url'         => ':attribute muss eine gültige URL sein.',
    'uuid'        => ':attribute muss ein UUID sein.',

    /*
    |--------------------------------------------------------------------------
    | Custom Statamic Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may validation messages for the custom rules provided by Statamic.
    |
    */

    'unique_entry_value'        => 'Dieser Wert wurde bereits vergeben.',
    'unique_user_value'         => 'Dieser Wert wurde bereits vergeben.',
    'duplicate_field_handle'    => 'Ein Feld mit einem Handle :handle darf nicht mehr als einmal verwendet werden.',
    'one_site_without_origin'   => 'Mindestens eine Website darf keine Quelle enthalten.',
    'origin_cannot_be_disabled' => 'Kann keine deaktivierte Quelle auswählen.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'Name',
        'username'              => 'Benutzername',
        'email'                 => 'E-Mail-Adresse',
        'first_name'            => 'Vorname',
        'last_name'             => 'Nachname',
        'password'              => 'Passwort',
        'password_confirmation' => 'Passwort-Bestätigung',
        'city'                  => 'Stadt',
        'country'               => 'Land',
        'address'               => 'Adresse',
        'phone'                 => 'Telefonnummer',
        'mobile'                => 'Handynummer',
        'age'                   => 'Alter',
        'sex'                   => 'Geschlecht',
        'gender'                => 'Geschlecht',
        'day'                   => 'Tag',
        'month'                 => 'Monat',
        'year'                  => 'Jahr',
        'hour'                  => 'Stunde',
        'minute'                => 'Minute',
        'second'                => 'Sekunde',
        'title'                 => 'Titel',
        'content'               => 'Inhalt',
        'description'           => 'Beschreibung',
        'excerpt'               => 'Auszug',
        'date'                  => 'Datum',
        'time'                  => 'Uhrzeit',
        'available'             => 'verfügbar',
        'size'                  => 'Grösse',
    ],
];
