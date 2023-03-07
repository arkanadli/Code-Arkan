import sys
import cv2
import numpy as np
from PyQt5 import QtCore, QtWidgets
from PyQt5.QtCore import *
from PyQt5.QtGui import *
from PyQt5.QtWidgets import *
from PyQt5.uic import loadUi
from matplotlib import pyplot as plt


class ShowImage(QMainWindow):
    def __init__(self):
        super(ShowImage,self).__init__()
        loadUi('GUI.ui', self)
        self.Image = None
        self.konstantaBrightness = 0
        self.konstantaKontras = 0
        self.brightnes = 0
        self.nkontras = 0
        self.button_loadCitra.clicked.connect(self.fungsi)
        self.button_prosesCitra.clicked.connect(self.grayscale)
        self.action_operasiPencerahan.triggered.connect(self.brightness)
        self.action_aturKontras.triggered.connect(self.addContrast)
        self.action_regangkanKontras.triggered.connect(self.regangkanContrast)
        self.action_negativeImage.triggered.connect(self.negative)
        self.action_binerImage.triggered.connect(self.threshold)
        self.actionOpen.triggered.connect(self.openClicked)
        self.actionSave.triggered.connect(self.save)
        self.brightnessSlider.valueChanged.connect(self.brightnesslider)
        self.buutonBrightness.clicked.connect(self.nilaibrightness)
        self.kontrasSlider.valueChanged.connect(self.kontrasslider)
        self.buutonKontras.clicked.connect(self.nilaikontras)
        self.action_histogramGrayscale.triggered.connect(self.grayHistogram)
        self.action_histogramRGB.triggered.connect(self.rgbHistogram)
        self.action_histogramEqualization.triggered.connect(self.equalizationHistogram)
        self.action_translasi.triggered.connect(self.translasi)
        self.action90_Derajat.triggered.connect(self.rotasi90derajat)
        self.action_90_Derajat.triggered.connect(self.rotasimin90derajat)
        self.action45_Derajat.triggered.connect(self.rotasi45derajat)
        self.action_45_Derajat.triggered.connect(self.rotasimin45derajat)
        self.action180_Derajat.triggered.connect(self.rotasi180derajat)
        self.actionZoom_in.triggered.connect(self.zoomIn)
        self.actionZoom_out.triggered.connect(self.zoomOut)
        self.actionCrop.triggered.connect(self.crop)

    def openClicked(self):
        flname, filter = QFileDialog.getOpenFileName(self, 'Open File', 'C:\\User\\', "Image Files(*.jpg)")
        if flname:
            self.loadImage(flname)
            print('Nilai Piksel Awal: ', self.Image[0:1, 0:1])
        else:
            print('Invalid Image')

    def save(self):
        flname, filter = QFileDialog.getSaveFileName(self, 'save file', 'C:\\', "Images Files(*.jpg)")
        if flname:
            cv2.imwrite(flname, self.Image)
        else:
            print('Saved')

    def loadImage(self, flname):
        self.Image = cv2.imread(flname)
        self.gambar = str(flname)
        self.displayImage(1)
        self.Image2 = self.Image

    def brightnesslider(self):
        self.konstantaBrightness = str(self.brightnessSlider.value())
        self.labelbrightness.setText(self.konstantaBrightness)

    def nilaibrightness(self):
        self.brightness()

    def kontrasslider(self):
        self.konstantaKontras = str(self.kontrasSlider.value())
        self.labelkontras.setText(self.konstantaKontras)

    def nilaikontras(self):
        self.addContrast()

    def fungsi(self):
        self.Image = cv2.imread('warship.jpg')
        self.displayImage(1)

    def grayscale(self):
        H, W = self.Image.shape[:2]
        gray = np.zeros((H, W), np.uint8)
        for i in range(H):
            for j in range(W):
                gray[i,j] = np.clip(0.299 * self.Image[i,j,0] +
                                    0.587 * self.Image[i,j,1]+
                                    0.114 * self.Image[i,j,2],0,255)
        self.Image = gray
        self.displayImage(2)

    def brightness(self):

        # prevent error
        try:
            self.Image = cv2.cvtColor(self.Image, cv2.COLOR_BGR2GRAY)
        except:
            pass
        H, W = self.Image.shape[:2]
        self.brightness = int(self.konstantaBrightness)

        for i in range(H):
            for j in range(W):
                a = self.Image.item(i,j)
                b = np.clip(a + self.brightness, 0, 255)

                self.Image.itemset((i,j),b)
        self.displayImage(2)
        print('Nilai Piksel Operasi brightnes: ', self.Image[0:1, 0:1])

    def addContrast(self):

        # prevent error
        try:
            self.Image = cv2.cvtColor(self.Image, cv2.COLOR_BGR2GRAY)
        except:
            pass
        H, W = self.Image.shape[:2]
        self.contrast = int(self.konstantaKontras)
        for i in range(H):
            for j in range(W):
                a = self.Image.item(i, j)
                b = np.clip(a * self.contrast / 100, 0, 255)

                self.Image.itemset((i, j), b)
        self.displayImage(2)
        print('Nilai Piksel Operasi kontras: ', self.Image[0:1, 0:1])

    def regangkanContrast(self):

        # prevent error
        try:
            self.Image = cv2.cvtColor(self.Image, cv2.COLOR_BGR2GRAY)
        except:
            pass
        H, W = self.Image.shape[:2]
        minV = np.min(self.Image)
        maxV = np.max(self.Image)

        for i in range(H):
            for j in range(W):
                a = self.Image.item(i, j)
                b = float(a-minV) / (maxV - minV) *255

                self.Image.itemset((i, j), b)
        self.displayImage(2)
        print('Nilai Piksel Operasi Regangkan Konstras: ', self.Image[0:1, 0:1])

    def negative(self):

        # prevent error
        try:
            self.Image = cv2.cvtColor(self.Image, cv2.COLOR_BGR2GRAY)
        except:
            pass
        H, W = self.Image.shape[:2]

        for i in range(H):
            for j in range(W):
                a = self.Image.item(i, j)
                b = np.clip(255-a, 0, 255)

                self.Image.itemset((i, j), b)
        self.displayImage(2)
        print('Nilai Piksel Operasi negative: ', self.Image[0:1, 0:1])

    def threshold(self):

        # prevent error
        try:
            self.Image = cv2.cvtColor(self.Image, cv2.COLOR_BGR2GRAY)
        except:
            pass
        H, W = self.Image.shape[:2]
        threshold = 150
        for i in range(H):
            for j in range(W):
                a = self.Image.item(i, j)
                if a > threshold :
                    a = 255
                elif a == threshold :
                    a = 0
                elif a < threshold :
                    a = 1


                self.Image.itemset((i, j), a)
        self.displayImage(2)
        print('Nilai Piksel Operasi biner: ', self.Image[0:1, 0:1])

    def grayHistogram(self):
        H, W = self.Image.shape[:2]
        gray = np.zeros((H, W), np.uint8)
        for i in range(H):
            for j in range(W):
                gray[i, j] = np.clip(0.299 * self.Image[i, j, 0] +
                                     0.587 * self.Image[i, j, 1] +
                                     0.114 * self.Image[i, j, 2], 0, 255)
        self.Image = gray
        self.displayImage(2)
        plt.hist(self.Image.ravel(), 255 , [0, 255])
        plt.show()

    def rgbHistogram(self):
        color = ("b", "g", "r")
        for i, col in enumerate(color):
            histo = cv2.calcHist([self.Image], [i], None, [256], [0,256])
            plt.plot(histo, color= col )
            plt.xlim([0,256])
        self.displayImage(2)
        plt.show()

    def equalizationHistogram(self):
        hist, bins = np.histogram(self.Image.flatten(), 256, [0,256])
        cdf = hist.cumsum()
        cdf_normalized = cdf * hist.max() / cdf.max()
        cdf_m = np.ma.masked_equal(cdf, 0)
        cdf_m = (cdf_m - cdf_m.min()) * 255 / (cdf_m.max() - cdf_m.min())
        cdf = np.ma.filled(cdf_m, 0).astype("uint8")
        self.Image = cdf[self.Image]
        self.displayImage(2)

        plt.plot(cdf_normalized,color = "b")
        plt.hist(self.Image.flatten(),256 ,[0, 256], color = "r")
        plt.xlim([0, 256])
        plt.legend(("cdf", "histogram"), loc="upper left")
        plt.show()

    def translasi(self):
        h , w = self.Image.shape[:2]
        quarter_h, quarter_w = h/4, w/4
        T = np.float32([[1, 0, quarter_w], [0,1, quarter_h]])
        img = cv2.warpAffine(self.Image , T , (w,h))
        self.Image = img
        self.displayImage(2)

    def rotasi90derajat(self):
        self.rotasi(90)

    def rotasimin90derajat(self):
        self.rotasi(-90)

    def rotasi45derajat(self):
        self.rotasi(45)

    def rotasimin45derajat(self):
        self.rotasi(-45)

    def rotasi180derajat(self):
        self.rotasi(180)

    def rotasi(self, degree):
        h ,w = self.Image.shape[:2]
        rotationMatrix = cv2.getRotationMatrix2D((w/2 , h/2), degree, 0.7)
        cos = np.abs(rotationMatrix[0, 0])
        sin = np.abs(rotationMatrix[0, 1])
        nW = int((h * sin) + (w * cos))
        nH = int((h * cos) + (w * sin))

        rotationMatrix[0, 2] += (nW / 2) - w / 2
        rotationMatrix[1, 2] += (nH / 2) - h / 2

        rot_image = cv2.warpAffine(self.Image , rotationMatrix, (h,w))
        self.Image = rot_image
        self.displayImage(2)

    def zoomIn(self):
        skala = 2
        resize_image = cv2.resize(self.Image , None, fx=skala, fy=skala, interpolation=cv2.INTER_CUBIC)
        cv2.imshow('Original', self.Image)
        cv2.imshow('Zoom In', resize_image)
        cv2.waitKey()

    def zoomOut(self):
        skala = 0.5
        resize_image = cv2.resize(self.Image , None, fx=skala, fy=skala, interpolation=cv2.INTER_CUBIC)
        cv2.imshow('Original', self.Image)
        cv2.imshow('Zoom Out', resize_image)
        cv2.waitKey()

    def crop(self):
        h, w = self.Image.shape[:2]
        start_row = 400
        start_col = 400
        end_row = 1600
        end_col = 1600
        # crop_image =
        cv2.imshow('Crop Image',self.Image[start_row:start_col, end_row:end_col])
        cv2.imshow('Original', self.Image)
        cv2.waitKey()

    def displayImage(self, windows=1):
        qformat = QImage.Format_Indexed8

        if len(self.Image.shape)==3:
            if (self.Image.shape[2])==4:
                qformat = QImage.Format_RGBA8888
            else:
                qformat = QImage.Format_RGB888

        img = QImage(self.Image, self.Image.shape[1], self.Image.shape[0],
                     self.Image.strides[0], qformat)

        img = img.rgbSwapped()
        # perlu diubah karena default sebelumnya adalah bgr hrus diubah ke rgb
        if windows == 1:
            self.label_Citra.setPixmap(QPixmap.fromImage(img))
            self.label_Citra.setAlignment(QtCore.Qt.AlignHCenter | QtCore.Qt.AlignVCenter)
            self.label_Citra.setScaledContents(True)
        if windows == 2:
            self.label_Proses.setPixmap(QPixmap.fromImage(img))
            self.label_Proses.setAlignment(QtCore.Qt.AlignHCenter | QtCore.Qt.AlignVCenter)
            self.label_Proses.setScaledContents(True)


app = QtWidgets.QApplication(sys.argv)
window = ShowImage()
window.setWindowTitle('Pertemuan 2')
window.show()
sys.exit(app.exec_())