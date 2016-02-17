#!/bin/bash
PORT=9200
URL="http://localhost:$PORT"
# Check that Elasticsearch is running
curl -s $URL/_cluster/health 2>&1
if [ $? != 0 ]; then
    echo "Unable to contact Elasticsearch on port $PORT."
    echo "Please ensure Elasticsearch is running and can be reached at $URL"
    exit -1
fi