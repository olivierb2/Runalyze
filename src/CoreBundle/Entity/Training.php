<?php
namespace Runalyze\Bundle\CoreBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 *
 * @ORM\Table(name="training", indexes={@ORM\Index(name="time", columns={"accountid", "time"}), @ORM\Index(name="sportid", columns={"accountid", "sportid"}), @ORM\Index(name="typeid", columns={"accountid", "typeid"})})
 * @ORM\Entity(repositoryClass="Runalyze\Bundle\CoreBundle\Entity\TrainingRepository")
 */
class Training
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=10, nullable=false, options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Sport")
     * @ORM\JoinColumn(name="sportid", referencedColumnName="id")
     */
    private $sport = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="integer", precision=10, nullable=false, options={"unsigned":true})
     */
    private $typeid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", precision=11, nullable=false)
     */
    private $time = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timezone_offset", type="smallint", precision=6, nullable=true)
     */
    private $timezoneOffset;

    /**
     * @var integer
     *
     * @ORM\Column(name="created", type="integer", precision=11, nullable=false, options={"unsigned":true})
     */
    private $created = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="edited", type="integer", precision=11, nullable=false, options={"unsigned":true})
     */
    private $edited = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=false, options={"unsigned":true, "default":0})
     */
    private $isPublic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_track", type="boolean", nullable=false, options={"unsigned":true,"default":0})
     */
    private $isTrack = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="distance", type="decimal", precision=6, scale=2, nullable=false, options={"unsigned":true, "default":0.00})
     */
    private $distance = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="s", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $s = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="elapsed_time", type="integer", precision=8, nullable=false, options={"unsigned":true})
     */
    private $elapsedTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="elevation", type="integer", precision=5, nullable=true, options={"unsigned":true})
     */
    private $elevation = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="kcal", type="integer", precision=5, nullable=true, options={"unsigned":true})
     */
    private $kcal = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="pulse_avg", columnDefinition="tinyint(3) unsigned DEFAULT NULL")
     */
    private $pulseAvg = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="pulse_max", columnDefinition="tinyint(3) unsigned DEFAULT NULL")
     */
    private $pulseMax = null;

    /**
     * @var string
     *
     * @ORM\Column(name="vdot", type="decimal", nullable=true, precision=5, scale=2, options={"unsigned":true})
     */
    private $vdot = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vdot_by_time", type="decimal", nullable=true, precision=5, scale=2, options={"unsigned":true})
     */
    private $vdotByTime = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vdot_with_elevation", type="decimal", nullable=true, precision=5, scale=2, options={"unsigned":true})
     */
    private $vdotWithElevation = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="use_vdot", type="boolean", nullable=false, options={"unsigned":true})
     */
    private $useVdot = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="fit_vdot_estimate", type="decimal", nullable=true, precision=4, scale=2, options={"unsigned":true})
     */
    private $fitVdotEstimate = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="fit_recovery_time", type="smallint", nullable=true, options={"unsigned":true})
     */
    private $fitRecoveryTime = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="fit_hrv_analysis", type="smallint", nullable=true, options={"unsigned":true})
     */
    private $fitHrvAnalysis = null;

    /**
     * @var string
     *
     * @ORM\Column(name="fit_training_effect", type="decimal", precision=2, scale=1, nullable=true, options={"unsigned":true})
     */
    private $fitTrainingEffect = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fit_performance_condition", type="boolean", nullable=true, options={"unsigned":true})
     */
    private $fitPerformanceCondition = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="jd_intensity", type="smallint", options={"unsigned":true})
     */
    private $jdIntensity = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rpe", type="boolean", nullable=true, options={"unsigned":true})
     */
    private $rpe = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="trimp", type="integer", options={"unsigned":true})
     */
    private $trimp = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="cadence", type="integer", options={"unsigned":true})
     */
    private $cadence = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="power", type="integer", options={"unsigned":true})
     */
    private $power = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_strokes", type="smallint", options={"unsigned":true})
     */
    private $totalStrokes = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="swolf", type="boolean", nullable=false, options={"unsigned":true})
     */
    private $swolf = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stride_length", type="boolean", options={"unsigned":true})
     */
    private $strideLength = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="groundcontact", type="smallint", options={"unsigned":true})
     */
    private $groundcontact = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="groundcontact_balance", type="smallint",  options={"unsigned":true})
     */
    private $groundcontactBalance = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vertical_oscillation", type="boolean", options={"unsigned":true})
     */
    private $verticalOscillation = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="vertical_ratio", type="smallint", options={"unsigned":true})
     */
    private $verticalRatio = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="temperature", type="boolean", nullable=true)
     */
    private $temperature = null;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wind_speed", type="boolean", nullable=true, options={"unsigned":true})
     */
    private $windSpeed = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="wind_deg", type="smallint", nullable=true, options={"unsigned":true})
     */
    private $windDeg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="humidity", type="boolean", precision=3, nullable=true, options={"unsigned":true})
     */
    private $humidity;

    /**
     * @var integer
     *
     * @ORM\Column(name="pressure", type="smallint", precision=4, nullable=true, options={"unsigned":true})
     */
    private $pressure;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_night", type="boolean", nullable=true, options={"unsigned":true})
     */
    private $isNight;

    /**
     * @var integer
     *
     * @ORM\Column(name="weatherid", type="smallint", nullable=false, options={"unsigned":true})
     */
    private $weatherid = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="weather_source", type="boolean", nullable=true, options={"unsigned":true})
     */
    private $weatherSource;

    /**
     * @var string
     *
     * @ORM\Column(name="route", type="text", length=65535, nullable=true)
     */
    private $route;

    /**
     * @var integer
     *
     * @ORM\Column(name="routeid", type="integer", nullable=false, options={"unsigned":true})
     */
    private $routeid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="splits", type="text", length=16777215, nullable=true)
     */
    private $splits;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="partner", type="text", length=65535, nullable=true)
     */
    private $partner;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountid", type="integer", nullable=false, options={"unsigned":true})
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="creator", type="string", length=100, nullable=false)
     */
    private $creator;

    /**
     * @var string
     *
     * @ORM\Column(name="creator_details", type="text", length=255, nullable=true)
     */
    private $creatorDetails;

    /**
     * @var integer
     *
     * @ORM\Column(name="activity_id", type="integer", nullable=true, options={"unsigned":true})
     */
    private $activityId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lock", type="boolean", nullable=false, options={"unsigned":true, "default":0})
     */
    private $lock = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipment", inversedBy="activity")
     * @ORM\JoinTable(name="activity_equipment",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="equipment", referencedColumnName="id")
     *   }
     * )
     */
    private $equipment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="activity")
     * @ORM\JoinTable(name="activity_tag",
     *   joinColumns={
     *     @ORM\JoinColumn(name="activity", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tag", referencedColumnName="id")
     *   }
     * )
     */
    private $tag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipment = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
