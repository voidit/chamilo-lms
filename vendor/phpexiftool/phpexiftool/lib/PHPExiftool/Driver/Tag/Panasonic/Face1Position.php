<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Panasonic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Face1Position extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'Face1Position';

    protected $FullName = 'Panasonic::FaceDetInfo';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 1 Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
