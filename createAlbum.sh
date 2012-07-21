if [ $# -ne 2 ]; then
    echo "Usage: createAlbum src dest" 1>&2
    exit 1
elif [ -d "$2" ]; then
    echo "Destination directory already exists" 1>&2
    exit 1
elif [ ! -d "$1" ]; then
    echo "Source directory doesn't exists" 1>&2
    exit 1
fi
mkdir $2
mkdir $2/images
mkdir $2/thumbnails
echo "start copying images"
cp $1/*.JPG $2/images/
cp $1/*.JPG $2/thumbnails/
cd $2/images
echo "start resizing images"
mogrify -auto-orient -resize 800x600 *.JPG
cd - > /dev/null
cd $2/thumbnails
echo "start resizing thumbnails"
mogrify -auto-orient -resize 150x144 *.JPG
echo "complete!!!"
exit 0

