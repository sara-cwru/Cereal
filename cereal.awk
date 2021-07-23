BEGIN {
	# gets cereal from user
    cereal = ARGV[1]

	# loops through cereal csv file and gets the calories and sugars
	while(getline < "cereal.csv") {
		split($0,arr,/\,/)
        	if (arr[1] == cereal)
            		print "Calories: " arr[4] "<br>" "Sugars: " arr[10]
    }
}

