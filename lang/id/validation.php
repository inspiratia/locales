<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| following language lines contain default error messages used by
	| validator class. Some of these rules have multiple versions such
	| such as size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute harus diterima.",
	"active_url"       => ":attribute bukanlah URL valid.",
	"after"            => ":attribute harus tanggal setelah :date.",
	"alpha"            => ":attribute hanya boleh terdiri dari huruf.",
	"alpha_dash"       => ":attribute hanya boleh terdiri dari huruf, angka, dan tanda dash.",
	"alpha_num"        => ":attribute hanya boleh terdiri dari huruf dan angka.",
	"before"           => ":attribute harus tanggal sebelum :date.",
	"between"          => array(
		"numeric" => ":attribute harus terdiri dari :min - :max.",
		"file"    => ":attribute harus terdiri dari :min - :max kilobytes.",
		"string"  => ":attribute harus terdiri dari :min - :max karakter.",
	),
	"confirmed"        => ":attribute konfirmasi tidak sesuai.",
	"date"             => ":attribute adalah bukan tanggal valid.",
	"date_format"      => ":attribute tidak sesuai dengan format :format.",
	"different"        => ":attribute dan :other harus berbeda.",
	"digit"           => ":attribute harus :digit digit.",
	"digit_between"   => ":attribute harus terdiri dari :min and :max digit.",
	"email"            => ":attribute format invalid.",
	"exists"           => "pilihan :attribute invalid.",
	"image"            => ":attribute harus berupa gambar.",
	"in"               => "pilihan :attribute invalid.",
	"integer"          => ":attribute harus bersifat integer.",
	"ip"               => ":attribute harus sebuah IP address valid.",
	"max"              => array(
		"numeric" => ":attribute tidak boleh lebih besar dari than :max.",
		"file"    => ":attribute tidak boleh lebih besar dari than :max kilobytes.",
		"string"  => ":attribute tidak boleh lebih besar dari than :max karakter.",
	),
	"mimes"            => ":attribute harus berupa tipe file: :values.",
	"min"              => array(
		"numeric" => ":attribute harus paling kurang :min.",
		"file"    => ":attribute harus paling kurang :min kilobytes.",
		"string"  => ":attribute harus paling kurang :min karakter.",
	),
	"not_in"           => "pilihan :attribute invalid.",
	"numeric"          => ":attribute berupa angka.",
	"regex"            => ":attribute format invalid.",
	"required"         => ":attribute field dibutuhkan.",
	"required_if"      => ":attribute field dibutuhkan ketika :other adalah :value.",
	"required_with"    => ":attribute field dibutuhkan ketika :values adalah saat ini.",
	"required_without" => ":attribute field dibutuhkan ketika :values adalah bukan saat ini.",
	"same"             => ":attribute dan :other harus sesuai.",
	"size"             => array(
		"numeric" => ":attribute harus :size.",
		"file"    => ":attribute harus :size kilobytes.",
		"string"  => ":attribute harus :size karakter.",
	),
	"unique"           => ":attribute telah dipesan.",
	"url"              => ":attribute format invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
