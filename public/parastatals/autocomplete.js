$(function() {  
    var availableTags = [  
      
      "ABUJA CHAMBER OF COMMERCE, INDUSTRY, MINES & AGRICULTURE",
      "ABUJA CHIEF MAGISTRATE COURT",
      "ABUJA COUNCIL FOR ARTS AND CULTURE",
      "ABUJA ENVIRONMENTAL PROTECTION BOARD",
      "ABUJA HIGH COURT OF JUSTICE",
      "ABUJA INVESTMENT AND PROPERTY DEV. CO. LTD.",
      "ABUJA MUNICIPAL AREA COUNCIL",
      "ABUJA URBAN MASS TRANSIT COMPANY",
      "ADMINISTRATIVE STAFF COLLEGE OF NIGERIA (ASCON)",
      "ALUMINUM SMELTING CO. OF NIGERIA LTD. (ALSCON)",
      "AREA COUNCIL SERVICE BOARD",
      "AREA COUNCIL STAFF PENSION BOARD",
      "ARMY RESERVE RECRUITMENT AND RESETTLEMENT CENTRE",
    "CALABAR EXPORT PROCESSING ZONES AUTHORITY (CEPZ)",
    "CENTRE FOR DISTANT LEARNING & CONTINUING EDUCATION",
    "CENTRAL BANK OF NIGERIA (CBN)",
    "CHRISTIAN WELFARE PILGRIMS BOARD",
    "CODE OF CONDUCT BUREAU",
    "COMMITTEE ON DEVOLUTION OF POWER",
    "BETWEEN FEDERAL STATES AND LOCAL GOVERNMENTS",
    "COMMITTEE ON VISION 2010 PROGRAMME",
    "CORPORATE AFFAIRS COMMISSION",
    "COUNCIL OF LEGAL EDUCATION",
    "DAILY TIMES OF NIGERIA PLC",
    "DEPARTMENT OF IMMIGRATION SERVICES",
    "NATIONAL CIVIL REGISTRATION",
    "DEPARTMENT OF SOIL EROSION & FLOOD CONTROL"
      
    ];  
    $( "#parastatals" ).autocomplete({  
      source: availableTags  
    });  
  });  