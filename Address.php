<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Address")
 */
 
class Address
{	
	
 	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
       protected $id;

        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $paf_id;

      /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $care_of;
    
        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $streetnumber;

        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $streetname;
    
    
       /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $streettype;
    
         /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $suburb;
    
    
        /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $city;
    
          /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $region;    
    
         /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $postcode;
    
    
      /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $country;
    
       /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $addresstype;
    
      static $streettypes = array('AC' => 'Access',
'AW' => 'Accessway',
'AL' => 'Alley',
'AY' => 'Alleyway',
'AM' => 'Amble',
'AN' => 'Anchorage',
'AX' => 'Annex',
'AP' => 'Approach',
'AR' => 'Arcade',
'AH' => 'Arch',
'AT' => 'Artery',
'AV' => 'Avenue',
'BK' => 'Bank',
'BI' => 'Basin',
'BY' => 'Bay',
'BH' => 'Beach',
'BT' => 'Belt',
'BN' => 'Bend',
'BB' => 'Block',
'BF' => 'Bluff',
'BM' => 'Bottom',
'BL' => 'Boulevard',
'BC' => 'Brace',
'BR' => 'Brae',
'BA' => 'Branch',
'BE' => 'Break',
'BS' => 'Briars',
'BG' => 'Bridge',
'BW' => 'Broadway',
'BO' => 'Brook',
'BZ' => 'Brow',
'BP' => 'Bypass',
'BX' => 'Byway',
'CP' => 'Cape',
'CW' => 'Causeway',
'C9' => 'Central',
'CE' => 'Centre',
'C6' => 'Centreway',
'CH' => 'Chase',
'CI' => 'Circle',
'C7' => 'Circlet',
'CC' => 'Circuit',
'CX' => 'Circus',
'CA' => 'Claim',
'CF' => 'Cliffs',
'CL' => 'Close',
'CD' => 'Colonnade',
'CM' => 'Common',
'C1' => 'Concourse',
'CB' => 'Copse',
'CN' => 'Corner',
'CN' => 'Corners',
'C4' => 'Corseo',
'C5' => 'Corso',
'CO' => 'Course',
'CT' => 'Court',
'CZ' => 'Courts',
'CY' => 'Courtyard',
'CV' => 'Cove',
'CK' => 'Creek',
'CR' => 'Crescent',
'CS' => 'Crest',
'CQ' => 'Cross',
'CG' => 'Crossing',
'C2' => 'Crossroad',
'C3' => 'Crossway',
'C8' => 'Cruiseway',
'CU' => 'Cul',
'CU' => 'Cul-De-Sac',
'CJ' => 'Cutting',
'DA' => 'Dale',
'DL' => 'Dell',
'DT' => 'Deviation',
'DP' => 'Dip',
'DS' => 'Distributor',
'DV' => 'Divide',
'DN' => 'Downs',
'DR' => 'Drive',
'DW' => 'Driveway',
'DU' => 'Dune',
'EA' => 'East',
'EG' => 'Edge',
'EL' => 'Elbow',
'EM' => 'Elm',
'ED' => 'End',
'EN' => 'Entrance',
'ES' => 'Esplanade',
'ET' => 'Estate',
'ET' => 'Estates',
'EW' => 'Expressway',
'EX' => 'Extension',
'FA' => 'Fairway',
'FQ' => 'Fall',
'FQ' => 'Falls',
'FR' => 'Fare',
'FM' => 'Farms',
'FN' => 'Fen',
'FE' => 'Fern',
'FY' => 'Ferry',
'FI' => 'Field',
'FI' => 'Fields',
'FC' => 'Fire Track',
'FX' => 'Firetrail',
'FL' => 'Flat',
'FB' => 'Flats',
'FO' => 'Follow',
'FW' => 'Footway',
'FD' => 'Ford',
'FH' => 'Foreshore',
'FS' => 'Forest',
'FK' => 'Forks',
'FJ' => 'Formation',
'FT' => 'Fort',
'FZ' => 'Freeway',
'FF' => 'Front',
'FG' => 'Frontage',
'GP' => 'Gap',
'GD' => 'Garden',
'GS' => 'Gardens',
'GT' => 'Gate',
'GT' => 'Gates',
'GL' => 'Glade',
'GN' => 'Glen',
'GA' => 'Grange',
'GG' => 'Green',
'GO' => 'Ground',
'GR' => 'Grove',
'GU' => 'Gully',
'HB' => 'Harbour',
'HV' => 'Haven',
'HE' => 'Head',
'HT' => 'Heights',
'HR' => 'Highroad',
'HW' => 'Highway',
'HL' => 'Hill',
'HS' => 'Hills',
'IC' => 'Interchange',
'IT' => 'Intersection',
'IS' => 'Island',
'JN' => 'Junction',
'KY' => 'Key',
'KB' => 'Knob',
'LA' => 'Ladder',
'LD' => 'Landing',
'LN' => 'Lane',
'LN' => 'Lanes',
'LY' => 'Laneway',
'LE' => 'Lea',
'LR' => 'Leader',
'LS' => 'Lees',
'LG' => 'Leigh',
'LH' => 'Lights',
'LI' => 'Line',
'LK' => 'Link',
'LL' => 'Little',
'LZ' => 'Lodge',
'LT' => 'Lookout',
'LO' => 'Loop',
'LO' => 'Loops',
'LW' => 'Lower',
'MA' => 'Mall',
'MD' => 'Mead',
'MW' => 'Meadows',
'MR' => 'Meander',
'ME' => 'Mew',
'ME' => 'Mews',
'ML' => 'Mile',
'MI' => 'Mill',
'MI' => 'Mills',
'MS' => 'Mission',
'MY' => 'Motorway',
'MU' => 'Motu',
'MN' => 'Mount',
'MT' => 'Mountain',
'NV' => 'Neaves',
'NK' => 'Nook',
'OK' => 'Oaks',
'OR' => 'Orchard',
'OL' => 'Outlook',
'OV' => 'Overbridge',
'PC' => 'Paddock',
'PU' => 'Paku',
'PM' => 'Palms',
'PD' => 'Parade',
'PK' => 'Park',
'PN' => 'Parklands',
'PY' => 'Parkway',
'PQ' => 'Part',
'PS' => 'Pass',
'PA' => 'Passage',
'PH' => 'Path',
'PW' => 'Pathway',
'PX' => 'Piazza',
'PL' => 'Place',
'PE' => 'Plateau',
'PZ' => 'Plaza',
'PB' => 'Pocket',
'PT' => 'Point',
'PO' => 'Port',
'PI' => 'Priors',
'PR' => 'Promenade',
'QD' => 'Quad',
'QL' => 'Quadrangle',
'QT' => 'Quadrant',
'QU' => 'Quay',
'QU' => 'Quays',
'RB' => 'Ramble',
'RM' => 'Ramp',
'RJ' => 'Ranae',
'RA' => 'Range',
'RP' => 'Rapids',
'RH' => 'Reach',
'RF' => 'Reef',
'RV' => 'Reserve',
'RT' => 'Rest',
'RE' => 'Retreat',
'RI' => 'Ride',
'RG' => 'Ridge',
'RG' => 'Ridgeway',
'R3' => 'Right Of Way',
'RK' => 'Ring',
'RS' => 'Rise',
'RR' => 'River',
'RR' => 'Riverway',
'R2' => 'Riviera',
'RD' => 'Road',
'R1' => 'Roadside',
'RY' => 'Roadway',
'RC' => 'Ronde',
'RL' => 'Rosebowl',
'RQ' => 'Rotary',
'RN' => 'Round',
'RO' => 'Route',
'RW' => 'Row',
'RX' => 'Rua',
'RU' => 'Rue',
'RZ' => 'Run',
'SV' => 'Service Lane',
'SW' => 'Service Way',
'SH' => 'Shore',
'SH' => 'Shores',
'SI' => 'Siding',
'SL' => 'Slope',
'SO' => 'Sound',
'SA' => 'Spa',
'SC' => 'Spring',
'SC' => 'Springs',
'SR' => 'Spur',
'SQ' => 'Square',
'SZ' => 'Stairs',
'SN' => 'Station',
'SE' => 'Steep',
'SS' => 'Steps',
'SB' => 'Straat',
'SG' => 'Straight',
'SD' => 'Strand',
'SM' => 'Stream',
'ST' => 'Street',
'SP' => 'Strip',
'SY' => 'Subway',
'SU' => 'Summit',
'TA' => 'Tarn',
'TC' => 'Terrace',
'TS' => 'Terraces',
'TF' => 'Thoroughfare',
'TW' => 'Tollway',
'TP' => 'Top',
'TO' => 'Tor',
'TZ' => 'Towers',
'TK' => 'Track',
'TR' => 'Trail',
'TL' => 'Trailer',
'TV' => 'Tram',
'TY' => 'Tramway',
'TE' => 'Trees',
'TI' => 'Triangle',
'TX' => 'Trunkway',
'TN' => 'Tunnel',
'TU' => 'Turn',
'UP' => 'Underpass',
'UR' => 'Upper',
'VL' => 'Vale',
'VY' => 'Valley',
'VN' => 'Venus',
'VD' => 'Viaduct',
'VW' => 'View',
'VS' => 'Views',
'VE' => 'Village',
'VI' => 'Villas',
'VA' => 'Vista',
'VU' => 'Vue',
'WD' => 'Wade',
'WK' => 'Walk',
'WW' => 'Walkway',
'WA' => 'Waters',
'WY' => 'Way',
'WF' => 'Wharf',
'WH' => 'Whenua',
'WO' => 'Wood',
'WN' => 'Wynd',
'YD' => 'Yard');
 
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set paf_id
     *
     * @param string $pafId
     * @return Address
     */
    public function setPafId($pafId)
    {
        $this->paf_id = $pafId;

        return $this;
    }

    /**
     * Get paf_id
     *
     * @return string 
     */
    public function getPafId()
    {
        return $this->paf_id;
    }

    /**
     * Set care_of
     *
     * @param string $careOf
     * @return Address
     */
    public function setCareOf($careOf)
    {
        $this->care_of = $careOf;

        return $this;
    }

    /**
     * Get care_of
     *
     * @return string 
     */
    public function getCareOf()
    {
        return $this->care_of;
    }

    /**
     * Set streetnumber
     *
     * @param string $streetnumber
     * @return Address
     */
    public function setStreetnumber($streetnumber)
    {
        $this->streetnumber = $streetnumber;

        return $this;
    }

    /**
     * Get streetnumber
     *
     * @return string 
     */
    public function getStreetnumber()
    {
        return $this->streetnumber;
    }

    /**
     * Set streetname
     *
     * @param string $streetname
     * @return Address
     */
    public function setStreetname($streetname)
    {
        $this->streetname = $streetname;

        return $this;
    }

    /**
     * Get streetname
     *
     * @return string 
     */
    public function getStreetname()
    {
        return $this->streetname;
    }

    /**
     * Set streettype
     *
     * @param string $streettype
     * @return Address
     */
    public function setStreettype($streettype)
    {
        $this->streettype = $streettype;

        return $this;
    }

    /**
     * Get streettype
     *
     * @return string 
     */
    public function getStreettype()
    {
        return $this->streettype;
    }

    /**
     * Set suburb
     *
     * @param string $suburb
     * @return Address
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;

        return $this;
    }

    /**
     * Get suburb
     *
     * @return string 
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Address
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set addresstype
     *
     * @param string $addresstype
     * @return Address
     */
    public function setAddresstype($addresstype)
    {
        $this->addresstype = $addresstype;

        return $this;
    }

    /**
     * Get addresstype
     *
     * @return string 
     */
    public function getAddresstype()
    {
        return $this->addresstype;
    }
}
