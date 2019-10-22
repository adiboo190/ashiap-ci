( function ( ashiap ) {
	"use strict";

	ashiap('form#login').submit( function( $ ) {
		$.preventDefault();

		var $username 			= ashiap( '[name="username"]' );
		var $password 			= ashiap( '[name="password"]' );
		var $alert      		= ashiap( '#alert-result' );
		var $form 				= ashiap( this );
		var $alertResultTextAll	= ashiap( '[id*="span-alertResult"]' );
		var $alertResultTitle	= ashiap( '#resultTitle' );
		var $alertResultText1	= ashiap( '#span-alertResult1' );
		var $alertResultText2	= ashiap( '#span-alertResult2' );
		var $alertResultText3	= ashiap( '#span-alertResult3' );
		var $alertResultText4	= ashiap( '#span-alertResult4' );
		var $alertResultText5	= ashiap( '#span-alertResult5' );
		var $alertResultText6	= ashiap( '#span-alertResult6' );
		var $alertResultText7	= ashiap( '#span-alertResult7' );

		$username.prop({ class : 'form-control' });
		$password.prop({ class : 'form-control' });

		// console.log($form.attr('data-redirect'));

		if ( $username.val() == '' && $password.val() == '' ) {

			// console.log(false);
			$username.prop({ class : 'form-control is-invalid' });
			$password.prop({ class : 'form-control is-invalid' });
			toastr.error( $alertResultText1.html(), $alertResultTitle.html() );

		} else if( $username.val() == '' ) {

			// console.log(true);
			$username.prop({ class : 'form-control is-invalid' });
			$password.prop({ class : 'form-control is-valid' });
			toastr.warning( $alertResultText2.html(), $alertResultTitle.html() );

		} else if( $password.val() == '' ) {

			// console.log(true);
			$username.prop({ class : 'form-control is-valid' });
			$password.prop({ class : 'form-control is-invalid' });
			toastr.warning( $alertResultText3.html(), $alertResultTitle.html() );

		} else {

			ashiap.ajax({
				url  : $form.attr('action'),
				data : $form.serialize(),
				type : 'POST',
				success : function ( $data ) {
					console.log($data);
					if ( $data == false ) {

						console.log($data);
						$username.prop({ class : 'form-control is-invalid' });
						$password.prop({ class : 'form-control is-invalid' });
						toastr.warning( $alertResultText4.html(), $alertResultTitle.html() );

					} else if( $data == true ) {

						// console.log(true);
						$password.prop({ class : 'form-control is-valid' });
						$username.prop({ class : 'form-control is-valid' });
						toastr.success( $alertResultText5.html(), $alertResultTitle.html() );

						setInterval(function() {
							window.location.href = $form.attr( 'data-redirect' );
						}, 10000);

					} else {

						// console.log(true);
						$password.prop({ class : 'form-control' });
						$username.prop({ class : 'form-control' });
						toastr.error( $alertResultText6.html(), $alertResultTitle.html() );

					}
				}
			});

		}

	});

})(jQuery);