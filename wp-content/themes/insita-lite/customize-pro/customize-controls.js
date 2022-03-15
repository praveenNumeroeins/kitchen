( function( api ) {

	// Extends our custom "insita-lite" section.
	api.sectionConstructor['insita-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );