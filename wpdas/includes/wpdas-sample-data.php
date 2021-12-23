<?php
global $wpdb;

$query = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons");

if(empty($query)){

    $wpdb->insert($table_name, array( 'city' =>	'Ardsley', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10502, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Armonk', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10504, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Bedford Hills', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10507, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Briarcliff Manor', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10510, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Bronx', 'tax_group' => 'NYC FUEL TAX', 'zipcode' => 10466, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Bronx', 'tax_group' => 'NYC FUEL TAX', 'zipcode' => 10471, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Bronx', 'tax_group' => 'NYC FUEL TAX', 'zipcode' => 10470, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Bronx', 'tax_group' => 'NYC FUEL TAX', 'zipcode' => 10475, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Bronxville', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10708, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Buchanan', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10511, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Chappaqua', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10504, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Chappaqua', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10514, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Chappaqua', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10549, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Cortland Manor', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10567, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Crestwood', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10707, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Croton-on-Hudson', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10520, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Crugers', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10520, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Crugers', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10521, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Dobbs Ferry', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10502, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Dobbs Ferry', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10522, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'EASTCHESTER', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10707, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Dobbs Ferry', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10709, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Elmsford', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10523, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Elmsford', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10607, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10502, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10503, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10522, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10523, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10530, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10533, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10583, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10591, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10595, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10603, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10606, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10607, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Greenburgh', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10706, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10528, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10573, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10577, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10580, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10604, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10605, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARTSDALE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10530, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARTSDALE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10583, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARTSDALE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10606, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HARTSDALE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10607, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'HASTING ON HUDSON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10706, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'IRVINGTON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10503, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'IRVINGTON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10533, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'IRVINGTON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10607, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'LARCHMONT', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10538, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MAMARONECK', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10538, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MAMARONECK', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10543, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MILLWOOD', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10545, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'MILLWOOD', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10562, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Montrose', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10548, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'MOUNT KISCO', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10549, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'MOUNT VERNON', 'tax_group' => 'MT VERNON FUELTAX', 'zipcode' => 10550, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MOUNT VERNON', 'tax_group' => 'MT VERNON FUELTAX', 'zipcode' => 10551, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MOUNT VERNON', 'tax_group' => 'MT VERNON FUELTAX', 'zipcode' => 10552, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MOUNT VERNON', 'tax_group' => 'MT VERNON FUELTAX', 'zipcode' => 10553, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'MOUNT VERNON', 'tax_group' => 'MT VERNON FUELTAX', 'zipcode' => 10708, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Mt Kisco', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10549, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'N WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10603, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10538, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10583, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10801, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10802, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10803, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10804, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10805, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'NEW ROCHELLE', 'tax_group' => 'New Rochelle Fuel Taxes', 'zipcode' => 10538, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'North Castle', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10504, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'North Castle', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10506, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'North Castle', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10603, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'North Castle', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10604, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'North White Pla', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10603, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Ossining', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10562, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Peekskill', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10566, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'PELHAM', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10803, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'PELHAM MANOR', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10803, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'PLEASANTVILLE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10570, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'PORTCHESTER', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10573, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'PORTCHESTER', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10577, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'RIVERDALE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10463, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'RIVERDALE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10471, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'RYE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10528, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'RYE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10580, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'RYE BROOK', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10573, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'RYE BROOK', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10604, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Scarsdale', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10530, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Scarsdale', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10583, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'SLEEPY HOLLOW', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10591, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Tarrytown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10591, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Thornwood', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10594, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'TUCKAHOE', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10707, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'VALHALLA', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10595, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'West Area', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 7093, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WEST HARRISON', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10604, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10601, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10602, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10603, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10604, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10605, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10606, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10607, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'WHITE PLAINS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10610, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10583, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10701, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10703, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10704, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10705, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10706, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10707, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10708, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'YONKERS', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10710, 'boiler' => 'Fuel & Service', 'fuel' => 'Fuel & Service', 'quantity' => 150 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10514, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10520, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10535, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10547, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10549, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10562, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10567, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10588, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10598, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));

    $wpdb->insert($table_name, array( 'city' =>	'Yorktown Heights', 'tax_group' => 'WESTCHESTER FUEL TAX', 'zipcode' => 10598, 'boiler' => 'NO', 'fuel' => 'Fuel ONLY', 'quantity' => 350 ));
}