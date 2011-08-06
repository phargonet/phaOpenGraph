<?php
class phaTypeOfMetadata {

    // Activities
    //============
    const GROUP_ACTIVITIES = 'Activities';
    const ACTIVITY = 'activity';
    const SPORT = 'sport';

    // Businesses
    //===========
    const GROUP_BUSINESSES = 'Businesses';
    const BAR = 'bar';
    const COMPANY = 'company';
    const CAFE = 'cafe';
    const HOTEL = 'hotel';
    const RESTAURANT = 'restaurant';

    // Groups
    //=======
    const GROUP_GROUPS = 'Groups';
    const CAUSE = 'cause';
    const SPORTS_LEAGUE = 'sports_league';
    const SPORTS_TEAM = 'sports_team';

    // Organizations
    //==============
    const GROUP_ORGANIZATIONS = 'Organizations';
    const BAND = 'band';
    const GOVERNMENT = 'government';
    const NON_PROFIT = 'non_profit';
    const SCHOOL = 'school';
    const UNIVERSITY = 'university';

    // People
    //=======
    const GROUP_PEOPLE = 'People';
    const ACTOR = 'actor';
    const ATHLETE = 'athlete';
    const AUTHOR = 'author';
    const DIRECTOR = 'director';
    const MUSICiAN = 'musician';
    const POLITICIAN = 'politician';
    const PROFILE = 'profile';
    const PUBLIC_FIGURE = 'public_figure';

    // Places
    //=======
    const GROUP_PLACES = 'Places';
    const CITY = 'city';
    const COUNTRY = 'country';
    const LANDMARK = 'landmark';
    const STATE_PROVINCE = 'state_province';

    // Products and Entertainment
    //===========================
    const GROUP_ENTERTAINMENT = 'Products and Entertainment';
    const ALBUM = 'album';
    const BOOK = 'book';
    const DRINK = 'drink';
    const FOOD = 'food';
    const GAME = 'game';
    const MOVIE = 'movie';
    const PRODUCT = 'product';
    const SONG = 'song';
    const TV_SHOW = 'tv_show';

    // Websites
    //=========
    const GROUP_WEBSITES = 'Websites';
    const ARTICLE = 'article';
    const BLOG = 'blog';
    const WEBSITE = 'website';

    /**
     * Unknown group
     * Group for unknown (not defined) type
     *
     * @var string
     */
    const GROUP_UNKNOWN = 'Unknown';

    /**
     * Type distribution by groups
     *
     * @var array
     */
    private static $_groupType = array(
        self::ACTIVITY => self::GROUP_ACTIVITIES,
        self::SPORT    => self::GROUP_ACTIVITIES,

        self::BAR     => self::GROUP_BUSINESSES,
        self::COMPANY => self::GROUP_BUSINESSES,
        self::CAFE    => self::GROUP_BUSINESSES,
        self::HOTEL   => self::GROUP_BUSINESSES,
        self::RESTAURANT => self::GROUP_BUSINESSES,

        self::CAUSE         => self::GROUP_GROUPS,
        self::SPORTS_LEAGUE => self::GROUP_GROUPS,
        self::SPORTS_TEAM   => self::GROUP_GROUPS,

        self::BAND         => self::GROUP_ORGANIZATIONS,
        self::GOVERNMENT   => self::GROUP_ORGANIZATIONS,
        self::NON_PROFIT   => self::GROUP_ORGANIZATIONS,
        self::SCHOOL       => self::GROUP_ORGANIZATIONS,
        self::UNIVERSITY   => self::GROUP_ORGANIZATIONS,

        self::ACTOR      => self::GROUP_PEOPLE,
        self::ATHLETE    => self::GROUP_PEOPLE,
        self::AUTHOR     => self::GROUP_PEOPLE,
        self::DIRECTOR   => self::GROUP_PEOPLE,
        self::MUSICiAN   => self::GROUP_PEOPLE,
        self::POLITICIAN => self::GROUP_PEOPLE,
        self::PROFILE    => self::GROUP_PEOPLE,
        self::PUBLIC_FIGURE   => self::GROUP_PEOPLE,

        self::CITY     => self::GROUP_PLACES,
        self::COUNTRY  => self::GROUP_PLACES,
        self::LANDMARK => self::GROUP_PLACES,
        self::STATE_PROVINCE   => self::GROUP_PLACES,

        self::ALBUM   => self::GROUP_ENTERTAINMENT,
        self::BOOK    => self::GROUP_ENTERTAINMENT,
        self::DRINK   => self::GROUP_ENTERTAINMENT,
        self::FOOD    => self::GROUP_ENTERTAINMENT,
        self::GAME    => self::GROUP_ENTERTAINMENT,
        self::MOVIE   => self::GROUP_ENTERTAINMENT,
        self::PRODUCT => self::GROUP_ENTERTAINMENT,
        self::SONG    => self::GROUP_ENTERTAINMENT,
        self::TV_SHOW => self::GROUP_ENTERTAINMENT,

        self::ARTICLE => self::GROUP_WEBSITES,
        self::BLOG    => self::GROUP_WEBSITES,
        self::WEBSITE => self::GROUP_WEBSITES,
    );

    /**
     * Define group for type
     * If type not found in existing group, reurned $defaultGroup.
     *
     * @param string $type Type for defenition
     * @param string $defaultGroup Group returned if type not found. By default is {@link self::GROUP_UNKNOWN}
     * @return string
     */
    static public function getGroup($type, $defaultGroup = self::GROUP_UNKNOWN ) {
        if ( isset( self::$_groupType[ $type ] ) ) {
            return self::$_groupType[ $type ];
        }
        else return $defaultGroup;
    }

    /**
     * Extend defined type
     *
     * @param string $type Type of new metadata
     * @param string $group Group for added new type. You must use defened group
     * or set your new group
     */
    static public function extend($type, $group) {
        self::$_groupType[$type] = $group;
    }
}