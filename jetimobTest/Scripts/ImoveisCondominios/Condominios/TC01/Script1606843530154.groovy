import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testobject.ObjectRepository.findWindowsObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import com.kms.katalon.core.windows.keyword.WindowsBuiltinKeywords as Windows
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.navigateToUrl('https://jetimob.app/dashboard')

WebUI.setText(findTestObject('Object Repository/Page_Condomnios/Page_Login  Jetimob/input_E-mail_input'), 'joaocarbonellpc@gmail.com')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Condomnios/Page_Login  Jetimob/input_Senha_input'), 'XeSSqczzhEZFwtMRX4Bs8w==')

WebUI.click(findTestObject('Object Repository/Page_Condomnios/Page_Login  Jetimob/span_Entrar'))

WebUI.click(findTestObject('Object Repository/Page_Condomnios/Page_Imveis/span_Condomnios'))

WebUI.mouseOver(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios/div_Novo'))

WebUI.click(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios/span_Novo'))

WebUI.setText(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios  Novo/input_Descrio do passo Dados do negcio et c_2f58c0'), 
    'Condominio Teste Katalon')

WebUI.click(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios  Novo/label_Sim'))

WebUI.click(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios  Novo/div_Prximo'))

WebUI.click(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios  Novo/a_Prximo'))

WebUI.setText(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios  Novo/input_Descrio do passo Localizao et cetera _699bd5'), 
    '97015-260')

WebUI.setText(findTestObject('Object Repository/Page_Condomnios/Page_Condomnios  Novo/input_Loading..._number'), '1263')

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Prximo (6)'))

WebUI.scrollToElement(findTestObject('Object Repository/Page_Condomnios  Novo/textarea_TV a cabo_external_observation'), 
    30)

WebUI.setText(findTestObject('Object Repository/Page_Condomnios  Novo/textarea_TV a cabo_external_observation'), 'Ambar')

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Prximo (1)'))

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Prximo (2)'))

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Prximo (3)'))

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Prximo (4)'))

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Prximo (5)'))

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Salvar'))

WebUI.click(findTestObject('Page_Condomnios  Novo/a_Remover'))

WebUI.click(findTestObject('Page_Condomnios  Novo/button_Excluir'))

