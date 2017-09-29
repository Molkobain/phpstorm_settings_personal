<?php
#parse("PHP File Header.php")

// Copyright (C) 2016 Guillaume Lajarige
// https://github.com/Molkobain
//
// This file is part of an open-source project
#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

#if (${NAMESPACE} && !${TESTED_NAMESPACE})

use ${TESTED_NAME};

#elseif (${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})

use ${TESTED_NAMESPACE}\\${TESTED_NAME};

#end

class ${NAME} extends#if(${NAMESPACE}) \PHPUnit_Framework_TestCase #else PHPUnit_Framework_TestCase #end{

}
