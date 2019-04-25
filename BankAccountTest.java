import static org.junit.Assert.*;

import org.junit.Test;

public class BankAccountTest {

	@Test
	public void testMakeLodgement() {
		BankAccount account = new BankAccount(1000,123,2);
		account.makeLodgement(20);
		double actual = account.getBalance();
		assertEquals(1020,actual,0.0);
	}

	@Test
	public void testMakeWithdrawal() {
		BankAccount account = new BankAccount(1000,123,2);
		double actual = account.makeWithdrawal(40);
		assertEquals(960,actual,0.0);
	}

	@Test
	public void testGetBalance() {
		BankAccount account = new BankAccount(1000,123,2);
		double actual = account.getBalance();
		assertEquals(1000,actual,0.0);
	}

	@Test
	public void testAddInterest() {
		BankAccount account = new BankAccount(1000,123,2);
		account.addInterest();
		double actual = account.getBalance();
		assertEquals(1020,actual,0.0);
	}

}
