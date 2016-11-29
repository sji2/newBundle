#!/usr/bin/python3

import os
import sys

#Deploys a given bundle to a given branch
#
#1st param: name of bundle
#2nd param: branch to deploy to
#

bundleName = "FE_" + sys.argv[1] + "_v";

#send deployment request 
os.system("php /home/santiago/bin/bundle/rabbitMQClient.php deployBundle " + bundleName + " " + sys.argv[2])
