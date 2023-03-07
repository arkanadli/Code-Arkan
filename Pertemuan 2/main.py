import cv2

image = cv2.imread('warship.jpg', cv2.IMREAD_COLOR)
cv2.imshow('Gambar 1',image)
cv2.waitKey(0)
cv2.destroyAllWindows()