$( function() {
	$( '#CP' ).hover(
		function showC() {
			document.getElementById('aboutTitle').innerHTML = "Company Profile";
			document.getElementById('content').innerHTML = "Our Company was established as Weaver Plant Ltd in 1968 and is a family company with a capable and experienced workforce.<br/><br/> The name was changed to Weaver Demolition Ltd in 2004 to reflect our main business activities.<br/><br/> We are Demolition and Dismantling specialists, we also deal with sales of railway sleepers, salvaged building materials, crushed concrete and other recycled materials. Whatever your requirements are, we will be pleased to discuss them with you. We can offer professional advice and will provide a comprehensive quotation for all prospective work.";
		}
	);	
				
	$( '#Accredidation' ).hover(
		function showA() {
			document.getElementById('aboutTitle').innerHTML = "Accreditation";
			document.getElementById('content').innerHTML = "We have been members of The National Federation of Demolition Contractors (NFDC) since 1989. This organisation is the official body representing the UK demolition industry and aims to establish, develop and instruct in new and safe procedures for the industry.  It also carries out regular site safety audits on its members.<br/><br/> All our employees are trained by the National Demolition Training Group in accordance withThe Construction Industry Training Board (CITB).  This ensures that all personnel are fully qualified to undertake the work required of them and comply with current Health & Safety legislation.";
		}
	);	
});	

$( function() {
	$( '#waste' ).hover(
		function showC() {
			document.getElementById('aboutTitle').innerHTML = "Waste Management";
			document.getElementById('content').innerHTML = "Current environmental issues place increasing responsibility on industry to re-cycle waste materials.  Weaver Demolition salvage and recycle materials from all projects wherever possible.  Concrete and masonry can be crushed on location using our mobile plant either for re-use on the site or for resale.  Wherever feasible, all other materials are also recycled for re-use.<br/><br/> We are able to offer advice and clearance of contaminated sites with a roll on/off skip and muck-away service."
		}	
	);	
				
	$( '#recycling' ).hover(
		function showA() {
			document.getElementById('aboutTitle').innerHTML = "Recycling";
			document.getElementById('content').innerHTML = "<h2>Concrete Masonry</h2><p>Concrete, brickwork, block-work and asphalt arising from projects, when crushed can be used as hardcore for general fill, when graded to 6F2 specification it can be used for capping layers, over-site or hard-standings.<br/><br/><h2>RSJ Steel Channels</h2><p>Various steel sections are salvaged and offered for sale.  New steels can also be sourced.</p>";
		}	
	);	
});			